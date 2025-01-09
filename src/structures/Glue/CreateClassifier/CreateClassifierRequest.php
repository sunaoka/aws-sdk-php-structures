<?php

namespace Sunaoka\Aws\Structures\Glue\CreateClassifier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CreateGrokClassifierRequest $GrokClassifier
 * @property Shapes\CreateXMLClassifierRequest $XMLClassifier
 * @property Shapes\CreateJsonClassifierRequest $JsonClassifier
 * @property Shapes\CreateCsvClassifierRequest $CsvClassifier
 */
class CreateClassifierRequest extends Request
{
    /**
     * @param array{
     *     GrokClassifier?: Shapes\CreateGrokClassifierRequest,
     *     XMLClassifier?: Shapes\CreateXMLClassifierRequest,
     *     JsonClassifier?: Shapes\CreateJsonClassifierRequest,
     *     CsvClassifier?: Shapes\CreateCsvClassifierRequest
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
