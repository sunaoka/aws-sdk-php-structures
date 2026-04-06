<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationLibrary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $libraryArn
 */
class GetDataAutomationLibraryRequest extends Request
{
    /**
     * @param array{libraryArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
