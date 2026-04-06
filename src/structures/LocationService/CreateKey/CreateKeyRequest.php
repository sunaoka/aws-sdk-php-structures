<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $ExpireTime
 * @property string $KeyName
 * @property bool|null $NoExpiry
 * @property Shapes\ApiKeyRestrictions $Restrictions
 * @property array<string, string>|null $Tags
 */
class CreateKeyRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     ExpireTime?: \Aws\Api\DateTimeResult|null,
     *     KeyName: string,
     *     NoExpiry?: bool|null,
     *     Restrictions: Shapes\ApiKeyRestrictions,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
