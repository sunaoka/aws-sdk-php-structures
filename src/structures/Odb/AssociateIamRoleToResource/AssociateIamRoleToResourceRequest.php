<?php

namespace Sunaoka\Aws\Structures\Odb\AssociateIamRoleToResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $iamRoleArn
 * @property 'KmsTde' $awsIntegration
 * @property string $resourceArn
 */
class AssociateIamRoleToResourceRequest extends Request
{
    /**
     * @param array{
     *     iamRoleArn: string,
     *     awsIntegration: 'KmsTde',
     *     resourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
