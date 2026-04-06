<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAnalyzer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerName
 * @property 'ACCOUNT'|'ORGANIZATION' $type
 * @property list<Shapes\InlineArchiveRule>|null $archiveRules
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateAnalyzerRequest extends Request
{
    /**
     * @param array{
     *     analyzerName: string,
     *     type: 'ACCOUNT'|'ORGANIZATION',
     *     archiveRules?: list<Shapes\InlineArchiveRule>|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
