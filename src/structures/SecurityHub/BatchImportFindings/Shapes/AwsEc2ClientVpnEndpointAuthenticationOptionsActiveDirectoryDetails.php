<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DirectoryId
 */
class AwsEc2ClientVpnEndpointAuthenticationOptionsActiveDirectoryDetails extends Shape
{
    /**
     * @param array{DirectoryId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
