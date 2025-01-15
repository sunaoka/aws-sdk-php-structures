<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateClassifier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\UpdateGrokClassifierRequest|null $GrokClassifier
 * @property Shapes\UpdateXMLClassifierRequest|null $XMLClassifier
 * @property Shapes\UpdateJsonClassifierRequest|null $JsonClassifier
 * @property Shapes\UpdateCsvClassifierRequest|null $CsvClassifier
 */
class UpdateClassifierRequest extends Request
{
    /**
     * @param array{
     *     GrokClassifier?: Shapes\UpdateGrokClassifierRequest|null,
     *     XMLClassifier?: Shapes\UpdateXMLClassifierRequest|null,
     *     JsonClassifier?: Shapes\UpdateJsonClassifierRequest|null,
     *     CsvClassifier?: Shapes\UpdateCsvClassifierRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
