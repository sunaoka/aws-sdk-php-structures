<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectSyntax\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ADJ'|'ADP'|'ADV'|'AUX'|'CONJ'|'CCONJ'|'DET'|'INTJ'|'NOUN'|'NUM'|'O'|'PART'|'PRON'|'PROPN'|'PUNCT'|'SCONJ'|'SYM'|'VERB' $Tag
 * @property float $Score
 */
class PartOfSpeechTag extends Shape
{
    /**
     * @param array{
     *     Tag?: 'ADJ'|'ADP'|'ADV'|'AUX'|'CONJ'|'CCONJ'|'DET'|'INTJ'|'NOUN'|'NUM'|'O'|'PART'|'PRON'|'PROPN'|'PUNCT'|'SCONJ'|'SYM'|'VERB',
     *     Score?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
