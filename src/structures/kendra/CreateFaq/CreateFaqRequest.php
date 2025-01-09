<?php

namespace Sunaoka\Aws\Structures\kendra\CreateFaq;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $Name
 * @property string $Description
 * @property Shapes\S3Path $S3Path
 * @property string $RoleArn
 * @property list<Shapes\Tag> $Tags
 * @property 'CSV'|'CSV_WITH_HEADER'|'JSON' $FileFormat
 * @property string $ClientToken
 * @property string $LanguageCode
 */
class CreateFaqRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     Name: string,
     *     Description?: string,
     *     S3Path: Shapes\S3Path,
     *     RoleArn: string,
     *     Tags?: list<Shapes\Tag>,
     *     FileFormat?: 'CSV'|'CSV_WITH_HEADER'|'JSON',
     *     ClientToken?: string,
     *     LanguageCode?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
