<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdateKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyName
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $ExpireTime
 * @property bool|null $NoExpiry
 * @property bool|null $ForceUpdate
 * @property Shapes\ApiKeyRestrictions|null $Restrictions
 */
class UpdateKeyRequest extends Request
{
    /**
     * @param array{
     *     KeyName: string,
     *     Description?: string|null,
     *     ExpireTime?: \Aws\Api\DateTimeResult|null,
     *     NoExpiry?: bool|null,
     *     ForceUpdate?: bool|null,
     *     Restrictions?: Shapes\ApiKeyRestrictions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
