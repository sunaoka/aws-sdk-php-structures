<?php

namespace Sunaoka\Aws\Structures\QLDBSession;

class QLDBSessionClient extends \Aws\QLDBSession\QLDBSessionClient
{
    use SendCommand\SendCommandTrait;
}
