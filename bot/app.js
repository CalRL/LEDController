//todo
const Discord = require('discord.js');
const { Client, Intents } = require('discord.js');
let intents = new Intents();
intents.add(['GUILDS', 'GUILD_MEMBERS', 'GUILD_BANS', 'GUILD_EMOJIS', 'GUILD_INTEGRATIONS', 'GUILD_WEBHOOKS', 'GUILD_INVITES', 'GUILD_VOICE_STATES', 'GUILD_MESSAGES', 'GUILD_MESSAGE_REACTIONS', 'GUILD_MESSAGE_TYPING', 'DIRECT_MESSAGES', 'DIRECT_MESSAGE_REACTIONS', 'DIRECT_MESSAGE_TYPING'])
const bot = new Client({ ws: { intents: intents }, partials: ['MESSAGE', 'CHANNEL', 'REACTION'] });

const fs = require('fs');

bot.on('ready', () => {
  console.log('[+] Bot Ready.')
}

bot.on('message', (msg) => {
  if(msg.author.bot) return;
  if(msg.author.id === bot.user.id) return;
  //if(msg.author.id === blacklist.user.id
  if(!msg.startsWith.PREFIX) return;
  
    const args = msg.content.split(' ');
    let cmd = args.shift();
}

bot.login();
