<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetVpcLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $description
 * @property list<string> $targetArns
 * @property 'AVAILABLE'|'PENDING'|'DELETING'|'FAILED' $status
 * @property string $statusMessage
 * @property array<string, string> $tags
 */
class VpcLink extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     description?: string,
     *     targetArns?: list<string>,
     *     status?: 'AVAILABLE'|'PENDING'|'DELETING'|'FAILED',
     *     statusMessage?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
