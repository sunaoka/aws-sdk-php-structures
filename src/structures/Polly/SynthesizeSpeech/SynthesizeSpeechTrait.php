<?php

namespace Sunaoka\Aws\Structures\Polly\SynthesizeSpeech;

trait SynthesizeSpeechTrait
{
    /**
     * @param SynthesizeSpeechRequest $args
     * @return SynthesizeSpeechResponse
     */
    public function synthesizeSpeech(SynthesizeSpeechRequest $args)
    {
        $result = parent::synthesizeSpeech($args->toArray());
        return new SynthesizeSpeechResponse($result->toArray());
    }
}
