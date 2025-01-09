<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectToxicContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GRAPHIC'|'HARASSMENT_OR_ABUSE'|'HATE_SPEECH'|'INSULT'|'PROFANITY'|'SEXUAL'|'VIOLENCE_OR_THREAT' $Name
 * @property float $Score
 */
class ToxicContent extends Shape
{
    /**
     * @param array{
     *     Name?: 'GRAPHIC'|'HARASSMENT_OR_ABUSE'|'HATE_SPEECH'|'INSULT'|'PROFANITY'|'SEXUAL'|'VIOLENCE_OR_THREAT',
     *     Score?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
