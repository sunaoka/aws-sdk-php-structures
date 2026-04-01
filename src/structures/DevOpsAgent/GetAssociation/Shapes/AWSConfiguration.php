<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assumableRoleArn
 * @property string $accountId
 * @property 'monitor' $accountType
 */
class AWSConfiguration extends Shape
{
    /**
     * @param array{
     *     assumableRoleArn: string,
     *     accountId: string,
     *     accountType: 'monitor'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
