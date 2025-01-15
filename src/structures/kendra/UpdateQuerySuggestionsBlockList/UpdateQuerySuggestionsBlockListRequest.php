<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateQuerySuggestionsBlockList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\S3Path|null $SourceS3Path
 * @property string|null $RoleArn
 */
class UpdateQuerySuggestionsBlockListRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     Id: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     SourceS3Path?: Shapes\S3Path|null,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
