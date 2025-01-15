<?php

namespace Sunaoka\Aws\Structures\FraudDetector\PutExternalModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $eventTypeName
 * @property 'TEXT_CSV'|'APPLICATION_JSON'|null $format
 * @property bool $useEventVariables
 * @property string|null $jsonInputTemplate
 * @property string|null $csvInputTemplate
 */
class ModelInputConfiguration extends Shape
{
    /**
     * @param array{
     *     eventTypeName?: string|null,
     *     format?: 'TEXT_CSV'|'APPLICATION_JSON'|null,
     *     useEventVariables: bool,
     *     jsonInputTemplate?: string|null,
     *     csvInputTemplate?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
