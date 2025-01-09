<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyName
 * @property Shapes\ApiKeyRestrictions $Restrictions
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $ExpireTime
 * @property bool $NoExpiry
 * @property array<string, string> $Tags
 */
class CreateKeyRequest extends Request
{
    /**
     * @param array{
     *     KeyName: string,
     *     Restrictions: Shapes\ApiKeyRestrictions,
     *     Description?: string,
     *     ExpireTime?: \Aws\Api\DateTimeResult,
     *     NoExpiry?: bool,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
