<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DefineAnalysisScheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Synonyms
 * @property string $Stopwords
 * @property string $StemmingDictionary
 * @property string $JapaneseTokenizationDictionary
 * @property 'none'|'minimal'|'light'|'full' $AlgorithmicStemming
 */
class AnalysisOptions extends Shape
{
    /**
     * @param array{
     *     Synonyms?: string,
     *     Stopwords?: string,
     *     StemmingDictionary?: string,
     *     JapaneseTokenizationDictionary?: string,
     *     AlgorithmicStemming?: 'none'|'minimal'|'light'|'full'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
