<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateClassifier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\UpdateGrokClassifierRequest $GrokClassifier
 * @property Shapes\UpdateXMLClassifierRequest $XMLClassifier
 * @property Shapes\UpdateJsonClassifierRequest $JsonClassifier
 * @property Shapes\UpdateCsvClassifierRequest $CsvClassifier
 */
class UpdateClassifierRequest extends Request
{
    /**
     * @param array{
     *     GrokClassifier?: Shapes\UpdateGrokClassifierRequest,
     *     XMLClassifier?: Shapes\UpdateXMLClassifierRequest,
     *     JsonClassifier?: Shapes\UpdateJsonClassifierRequest,
     *     CsvClassifier?: Shapes\UpdateCsvClassifierRequest
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
