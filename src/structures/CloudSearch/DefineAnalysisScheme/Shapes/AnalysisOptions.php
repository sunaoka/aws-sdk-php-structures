<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DefineAnalysisScheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Synonyms
 * @property string|null $Stopwords
 * @property string|null $StemmingDictionary
 * @property string|null $JapaneseTokenizationDictionary
 * @property 'none'|'minimal'|'light'|'full'|null $AlgorithmicStemming
 */
class AnalysisOptions extends Shape
{
    /**
     * @param array{
     *     Synonyms?: string|null,
     *     Stopwords?: string|null,
     *     StemmingDictionary?: string|null,
     *     JapaneseTokenizationDictionary?: string|null,
     *     AlgorithmicStemming?: 'none'|'minimal'|'light'|'full'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
