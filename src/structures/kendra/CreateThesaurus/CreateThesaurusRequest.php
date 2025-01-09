<?php

namespace Sunaoka\Aws\Structures\kendra\CreateThesaurus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $Name
 * @property string $Description
 * @property string $RoleArn
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\S3Path $SourceS3Path
 * @property string $ClientToken
 */
class CreateThesaurusRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     Name: string,
     *     Description?: string,
     *     RoleArn: string,
     *     Tags?: list<Shapes\Tag>,
     *     SourceS3Path: Shapes\S3Path,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
