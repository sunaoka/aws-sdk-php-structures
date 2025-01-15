<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\ListResourceSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceSetArn
 * @property string $ResourceSetName
 * @property string $ResourceSetType
 * @property list<Resource> $Resources
 * @property array<string, string>|null $Tags
 */
class ResourceSetOutput extends Shape
{
    /**
     * @param array{
     *     ResourceSetArn: string,
     *     ResourceSetName: string,
     *     ResourceSetType: string,
     *     Resources: list<Resource>,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
