<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateImageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageName
 * @property string $Alias
 * @property int<0, max> $Version
 * @property list<string> $AliasesToAdd
 * @property list<string> $AliasesToDelete
 * @property 'NOT_PROVIDED'|'STABLE'|'TO_BE_ARCHIVED'|'ARCHIVED' $VendorGuidance
 * @property 'TRAINING'|'INFERENCE'|'NOTEBOOK_KERNEL' $JobType
 * @property string $MLFramework
 * @property string $ProgrammingLang
 * @property 'CPU'|'GPU' $Processor
 * @property bool $Horovod
 * @property string $ReleaseNotes
 */
class UpdateImageVersionRequest extends Request
{
    /**
     * @param array{
     *     ImageName: string,
     *     Alias?: string,
     *     Version?: int<0, max>,
     *     AliasesToAdd?: list<string>,
     *     AliasesToDelete?: list<string>,
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
