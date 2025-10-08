<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2;

class LexRuntimeV2Client extends \Aws\LexRuntimeV2\LexRuntimeV2Client
{
    use DeleteSession\DeleteSessionTrait;
    use GetSession\GetSessionTrait;
    use PutSession\PutSessionTrait;
    use RecognizeText\RecognizeTextTrait;
    use RecognizeUtterance\RecognizeUtteranceTrait;
}
