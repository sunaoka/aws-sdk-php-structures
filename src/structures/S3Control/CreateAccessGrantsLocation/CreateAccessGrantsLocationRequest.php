<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessGrantsLocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $LocationScope
 * @property string $IAMRoleArn
 * @property list<Shapes\Tag> $Tags
 */
class CreateAccessGrantsLocationRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     LocationScope: string,
     *     IAMRoleArn: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
