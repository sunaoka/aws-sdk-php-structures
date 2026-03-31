<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\AssociateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'source' $accountType
 * @property string $assumableRoleArn
 * @property string|null $externalId
 */
class SourceAwsConfiguration extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     accountType: 'source',
     *     assumableRoleArn: string,
     *     externalId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
