<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateImageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BaseImage
 * @property string $ClientToken
 * @property string $ImageName
 * @property list<string>|null $Aliases
 * @property 'NOT_PROVIDED'|'STABLE'|'TO_BE_ARCHIVED'|'ARCHIVED'|null $VendorGuidance
 * @property 'TRAINING'|'INFERENCE'|'NOTEBOOK_KERNEL'|null $JobType
 * @property string|null $MLFramework
 * @property string|null $ProgrammingLang
 * @property 'CPU'|'GPU'|null $Processor
 * @property bool|null $Horovod
 * @property string|null $ReleaseNotes
 */
class CreateImageVersionRequest extends Request
{
    /**
     * @param array{
     *     BaseImage: string,
     *     ClientToken: string,
     *     ImageName: string,
     *     Aliases?: list<string>|null,
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
