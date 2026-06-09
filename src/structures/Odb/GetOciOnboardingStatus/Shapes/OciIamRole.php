<?php

namespace Sunaoka\Aws\Structures\Odb\GetOciOnboardingStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $iamRoleArn
 * @property 'KmsTde'|null $awsIntegration
 */
class OciIamRole extends Shape
{
    /**
     * @param array{
     *     iamRoleArn?: string|null,
     *     awsIntegration?: 'KmsTde'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
