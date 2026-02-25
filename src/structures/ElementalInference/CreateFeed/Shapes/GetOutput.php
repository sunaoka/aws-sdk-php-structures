<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateFeed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property OutputConfig $outputConfig
 * @property 'ENABLED'|'DISABLED' $status
 * @property string|null $description
 * @property bool|null $fromAssociation
 */
class GetOutput extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     outputConfig: OutputConfig,
     *     status: 'ENABLED'|'DISABLED',
     *     description?: string|null,
     *     fromAssociation?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
