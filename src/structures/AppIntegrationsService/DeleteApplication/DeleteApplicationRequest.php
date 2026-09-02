<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\DeleteApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property bool|null $Force
 */
class DeleteApplicationRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
