<?php

namespace Sunaoka\Aws\Structures\Sns\SetPlatformApplicationAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PlatformApplicationArn
 * @property array<string, string> $Attributes
 */
class SetPlatformApplicationAttributesRequest extends Request
{
    /**
     * @param array{
     *     PlatformApplicationArn: string,
     *     Attributes: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
