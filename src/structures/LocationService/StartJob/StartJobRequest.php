<?php

namespace Sunaoka\Aws\Structures\LocationService\StartJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property 'ValidateAddress' $Action
 * @property Shapes\JobActionOptions|null $ActionOptions
 * @property string $ExecutionRoleArn
 * @property Shapes\JobInputOptions $InputOptions
 * @property string|null $Name
 * @property Shapes\JobOutputOptions $OutputOptions
 * @property array<string, string>|null $Tags
 */
class StartJobRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     Action: 'ValidateAddress',
     *     ActionOptions?: Shapes\JobActionOptions|null,
     *     ExecutionRoleArn: string,
     *     InputOptions: Shapes\JobInputOptions,
     *     Name?: string|null,
     *     OutputOptions: Shapes\JobOutputOptions,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
