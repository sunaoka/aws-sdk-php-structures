<?php

namespace Sunaoka\Aws\Structures\QApps\PredictQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FormInputCardMetadataSchema $schema
 */
class FormInputCardMetadata extends Shape
{
    /**
     * @param array{schema: FormInputCardMetadataSchema} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
