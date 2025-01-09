<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\DeleteService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationIdentifier
 * @property string $EnvironmentIdentifier
 * @property string $ServiceIdentifier
 */
class DeleteServiceRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIdentifier: string,
     *     EnvironmentIdentifier: string,
     *     ServiceIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
