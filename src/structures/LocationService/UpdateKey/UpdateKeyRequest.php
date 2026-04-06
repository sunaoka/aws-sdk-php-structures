<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdateKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $ExpireTime
 * @property bool|null $ForceUpdate
 * @property string $KeyName
 * @property bool|null $NoExpiry
 * @property Shapes\ApiKeyRestrictions|null $Restrictions
 */
class UpdateKeyRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     ExpireTime?: \Aws\Api\DateTimeResult|null,
     *     ForceUpdate?: bool|null,
     *     KeyName: string,
     *     NoExpiry?: bool|null,
     *     Restrictions?: Shapes\ApiKeyRestrictions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
