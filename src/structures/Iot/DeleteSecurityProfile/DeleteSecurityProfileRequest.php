<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteSecurityProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $securityProfileName
 * @property int $expectedVersion
 */
class DeleteSecurityProfileRequest extends Request
{
    /**
     * @param array{
     *     securityProfileName: string,
     *     expectedVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
