<?php

namespace Sunaoka\Aws\Structures\Sns\CreatePlatformApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Platform
 * @property array<string, string> $Attributes
 */
class CreatePlatformApplicationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Platform: string,
     *     Attributes: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
