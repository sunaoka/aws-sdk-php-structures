<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\DeleteDataAutomationLibrary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $libraryArn
 */
class DeleteDataAutomationLibraryRequest extends Request
{
    /**
     * @param array{libraryArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
