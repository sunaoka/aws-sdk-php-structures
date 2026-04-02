<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateDataAutomationLibrary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $libraryArn
 * @property string|null $libraryDescription
 * @property string|null $clientToken
 */
class UpdateDataAutomationLibraryRequest extends Request
{
    /**
     * @param array{
     *     libraryArn: string,
     *     libraryDescription?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
