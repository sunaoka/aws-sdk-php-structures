<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutApplicationAssignmentConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property bool $AssignmentRequired
 */
class PutApplicationAssignmentConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     AssignmentRequired: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
