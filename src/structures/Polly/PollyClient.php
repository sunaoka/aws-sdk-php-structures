<?php

namespace Sunaoka\Aws\Structures\Polly;

class PollyClient extends \Aws\Polly\PollyClient
{
    use DeleteLexicon\DeleteLexiconTrait;
    use DescribeVoices\DescribeVoicesTrait;
    use GetLexicon\GetLexiconTrait;
    use GetSpeechSynthesisTask\GetSpeechSynthesisTaskTrait;
    use ListLexicons\ListLexiconsTrait;
    use ListSpeechSynthesisTasks\ListSpeechSynthesisTasksTrait;
    use PutLexicon\PutLexiconTrait;
    use StartSpeechSynthesisTask\StartSpeechSynthesisTaskTrait;
    use SynthesizeSpeech\SynthesizeSpeechTrait;
}
