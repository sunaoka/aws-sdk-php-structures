<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetVpcLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $description
 * @property list<string>|null $targetArns
 * @property 'AVAILABLE'|'PENDING'|'DELETING'|'FAILED'|null $status
 * @property string|null $statusMessage
 * @property array<string, string>|null $tags
 */
class VpcLink extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     targetArns?: list<string>|null,
     *     status?: 'AVAILABLE'|'PENDING'|'DELETING'|'FAILED'|null,
     *     statusMessage?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
