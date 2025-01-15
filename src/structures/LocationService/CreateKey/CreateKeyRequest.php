<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyName
 * @property Shapes\ApiKeyRestrictions $Restrictions
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $ExpireTime
 * @property bool|null $NoExpiry
 * @property array<string, string>|null $Tags
 */
class CreateKeyRequest extends Request
{
    /**
     * @param array{
     *     KeyName: string,
     *     Restrictions: Shapes\ApiKeyRestrictions,
     *     Description?: string|null,
     *     ExpireTime?: \Aws\Api\DateTimeResult|null,
     *     NoExpiry?: bool|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
