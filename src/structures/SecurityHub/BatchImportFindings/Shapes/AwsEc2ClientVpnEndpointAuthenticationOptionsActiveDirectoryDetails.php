<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DirectoryId
 */
class AwsEc2ClientVpnEndpointAuthenticationOptionsActiveDirectoryDetails extends Shape
{
    /**
     * @param array{DirectoryId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
