<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateImageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BaseImage
 * @property string $ClientToken
 * @property string $ImageName
 * @property list<string> $Aliases
 * @property 'NOT_PROVIDED'|'STABLE'|'TO_BE_ARCHIVED'|'ARCHIVED' $VendorGuidance
 * @property 'TRAINING'|'INFERENCE'|'NOTEBOOK_KERNEL' $JobType
 * @property string $MLFramework
 * @property string $ProgrammingLang
 * @property 'CPU'|'GPU' $Processor
 * @property bool $Horovod
 * @property string $ReleaseNotes
 */
class CreateImageVersionRequest extends Request
{
    /**
     * @param array{
     *     BaseImage: string,
     *     ClientToken: string,
     *     ImageName: string,
     *     Aliases?: list<string>,
     *     VendorGuidance?: 'NOT_PROVIDED'|'STABLE'|'TO_BE_ARCHIVED'|'ARCHIVED',
     *     JobType?: 'TRAINING'|'INFERENCE'|'NOTEBOOK_KERNEL',
     *     MLFramework?: string,
     *     ProgrammingLang?: string,
     *     Processor?: 'CPU'|'GPU',
     *     Horovod?: bool,
     *     ReleaseNotes?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
