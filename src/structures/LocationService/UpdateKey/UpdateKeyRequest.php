<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdateKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyName
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $ExpireTime
 * @property bool $NoExpiry
 * @property bool $ForceUpdate
 * @property Shapes\ApiKeyRestrictions $Restrictions
 */
class UpdateKeyRequest extends Request
{
    /**
     * @param array{
     *     KeyName: string,
     *     Description?: string,
     *     ExpireTime?: \Aws\Api\DateTimeResult,
     *     NoExpiry?: bool,
     *     ForceUpdate?: bool,
     *     Restrictions?: Shapes\ApiKeyRestrictions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
