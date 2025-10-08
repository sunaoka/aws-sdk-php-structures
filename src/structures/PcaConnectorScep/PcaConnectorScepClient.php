<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep;

class PcaConnectorScepClient extends \Aws\PcaConnectorScep\PcaConnectorScepClient
{
    use CreateChallenge\CreateChallengeTrait;
    use CreateConnector\CreateConnectorTrait;
    use DeleteChallenge\DeleteChallengeTrait;
    use DeleteConnector\DeleteConnectorTrait;
    use GetChallengeMetadata\GetChallengeMetadataTrait;
    use GetChallengePassword\GetChallengePasswordTrait;
    use GetConnector\GetConnectorTrait;
    use ListChallengeMetadata\ListChallengeMetadataTrait;
    use ListConnectors\ListConnectorsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
