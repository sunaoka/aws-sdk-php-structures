<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateImageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageName
 * @property string|null $Alias
 * @property int<0, max>|null $Version
 * @property list<string>|null $AliasesToAdd
 * @property list<string>|null $AliasesToDelete
 * @property 'NOT_PROVIDED'|'STABLE'|'TO_BE_ARCHIVED'|'ARCHIVED'|null $VendorGuidance
 * @property 'TRAINING'|'INFERENCE'|'NOTEBOOK_KERNEL'|null $JobType
 * @property string|null $MLFramework
 * @property string|null $ProgrammingLang
 * @property 'CPU'|'GPU'|null $Processor
 * @property bool|null $Horovod
 * @property string|null $ReleaseNotes
 */
class UpdateImageVersionRequest extends Request
{
    /**
     * @param array{
     *     ImageName: string,
     *     Alias?: string|null,
     *     Version?: int<0, max>|null,
     *     AliasesToAdd?: list<string>|null,
     *     AliasesToDelete?: list<string>|null,
     *     VendorGuidance?: 'NOT_PROVIDED'|'STABLE'|'TO_BE_ARCHIVED'|'ARCHIVED'|null,
     *     JobType?: 'TRAINING'|'INFERENCE'|'NOTEBOOK_KERNEL'|null,
     *     MLFramework?: string|null,
     *     ProgrammingLang?: string|null,
     *     Processor?: 'CPU'|'GPU'|null,
     *     Horovod?: bool|null,
     *     ReleaseNotes?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
