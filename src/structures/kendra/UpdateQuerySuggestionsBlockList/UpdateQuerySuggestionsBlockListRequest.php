<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateQuerySuggestionsBlockList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property Shapes\S3Path $SourceS3Path
 * @property string $RoleArn
 */
class UpdateQuerySuggestionsBlockListRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     Id: string,
     *     Name?: string,
     *     Description?: string,
     *     SourceS3Path?: Shapes\S3Path,
     *     RoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
