<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateThesaurus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $Name
 * @property string $IndexId
 * @property string $Description
 * @property string $RoleArn
 * @property Shapes\S3Path $SourceS3Path
 */
class UpdateThesaurusRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string,
     *     IndexId: string,
     *     Description?: string,
     *     RoleArn?: string,
     *     SourceS3Path?: Shapes\S3Path
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
