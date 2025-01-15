<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateThesaurus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $Name
 * @property string $IndexId
 * @property string|null $Description
 * @property string|null $RoleArn
 * @property Shapes\S3Path|null $SourceS3Path
 */
class UpdateThesaurusRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string|null,
     *     IndexId: string,
     *     Description?: string|null,
     *     RoleArn?: string|null,
     *     SourceS3Path?: Shapes\S3Path|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
