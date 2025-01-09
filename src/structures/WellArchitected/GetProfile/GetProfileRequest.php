<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileArn
 * @property string $ProfileVersion
 */
class GetProfileRequest extends Request
{
    /**
     * @param array{
     *     ProfileArn: string,
     *     ProfileVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
