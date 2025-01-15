<?php

namespace Sunaoka\Aws\Structures\CodeConnections\UpdateHost\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcId
 * @property list<string> $SubnetIds
 * @property list<string> $SecurityGroupIds
 * @property string|null $TlsCertificate
 */
class VpcConfiguration extends Shape
{
    /**
     * @param array{
     *     VpcId: string,
     *     SubnetIds: list<string>,
     *     SecurityGroupIds: list<string>,
     *     TlsCertificate?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
