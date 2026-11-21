<?php

namespace Sunaoka\Aws\Structures\Textract\GetProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectArn
 */
class GetProjectRequest extends Request
{
    /**
     * @param array{ProjectArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
