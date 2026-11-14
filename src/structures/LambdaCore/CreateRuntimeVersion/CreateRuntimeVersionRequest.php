<?php

namespace Sunaoka\Aws\Structures\LambdaCore\CreateRuntimeVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuntimeName
 * @property string $ImageUri
 * @property string $Name
 * @property string|null $ReleaseNotes
 * @property bool|null $DryRun
 */
class CreateRuntimeVersionRequest extends Request
{
    /**
     * @param array{
     *     RuntimeName: string,
     *     ImageUri: string,
     *     Name: string,
     *     ReleaseNotes?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
