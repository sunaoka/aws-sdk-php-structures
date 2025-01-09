<?php

namespace Sunaoka\Aws\Structures\kendra\CreateQuerySuggestionsBlockList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $Name
 * @property string $Description
 * @property Shapes\S3Path $SourceS3Path
 * @property string $ClientToken
 * @property string $RoleArn
 * @property list<Shapes\Tag> $Tags
 */
class CreateQuerySuggestionsBlockListRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     Name: string,
     *     Description?: string,
     *     SourceS3Path: Shapes\S3Path,
     *     ClientToken?: string,
     *     RoleArn: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
