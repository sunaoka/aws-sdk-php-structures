<?php

namespace Sunaoka\Aws\Structures\FraudDetector\PutExternalModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventTypeName
 * @property 'TEXT_CSV'|'APPLICATION_JSON' $format
 * @property bool $useEventVariables
 * @property string $jsonInputTemplate
 * @property string $csvInputTemplate
 */
class ModelInputConfiguration extends Shape
{
    /**
     * @param array{
     *     eventTypeName?: string,
     *     format?: 'TEXT_CSV'|'APPLICATION_JSON',
     *     useEventVariables: bool,
     *     jsonInputTemplate?: string,
     *     csvInputTemplate?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
