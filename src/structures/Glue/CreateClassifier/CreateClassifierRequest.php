<?php

namespace Sunaoka\Aws\Structures\Glue\CreateClassifier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CreateGrokClassifierRequest|null $GrokClassifier
 * @property Shapes\CreateXMLClassifierRequest|null $XMLClassifier
 * @property Shapes\CreateJsonClassifierRequest|null $JsonClassifier
 * @property Shapes\CreateCsvClassifierRequest|null $CsvClassifier
 */
class CreateClassifierRequest extends Request
{
    /**
     * @param array{
     *     GrokClassifier?: Shapes\CreateGrokClassifierRequest|null,
     *     XMLClassifier?: Shapes\CreateXMLClassifierRequest|null,
     *     JsonClassifier?: Shapes\CreateJsonClassifierRequest|null,
     *     CsvClassifier?: Shapes\CreateCsvClassifierRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
