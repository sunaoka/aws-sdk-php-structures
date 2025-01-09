<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateRetriever;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property 'NATIVE_INDEX'|'KENDRA_INDEX' $type
 * @property string $displayName
 * @property Shapes\RetrieverConfiguration $configuration
 * @property string $roleArn
 * @property string $clientToken
 * @property list<Shapes\Tag> $tags
 */
class CreateRetrieverRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     type: 'NATIVE_INDEX'|'KENDRA_INDEX',
     *     displayName: string,
     *     configuration: Shapes\RetrieverConfiguration,
     *     roleArn?: string,
     *     clientToken?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
