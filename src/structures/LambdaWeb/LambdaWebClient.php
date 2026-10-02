<?php

namespace Sunaoka\Aws\Structures\LambdaWeb;

class LambdaWebClient extends \Aws\LambdaWeb\LambdaWebClient
{
    use CreateWebFunction\CreateWebFunctionTrait;
    use CreateWebFunctionEndpoint\CreateWebFunctionEndpointTrait;
    use CreateWebFunctionRevision\CreateWebFunctionRevisionTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteWebFunction\DeleteWebFunctionTrait;
    use DeleteWebFunctionEndpoint\DeleteWebFunctionEndpointTrait;
    use DeleteWebFunctionRevision\DeleteWebFunctionRevisionTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use GetWebAccountSettings\GetWebAccountSettingsTrait;
    use GetWebFunction\GetWebFunctionTrait;
    use GetWebFunctionEndpoint\GetWebFunctionEndpointTrait;
    use GetWebFunctionRevision\GetWebFunctionRevisionTrait;
    use ListTags\ListTagsTrait;
    use ListWebFunctionEndpoints\ListWebFunctionEndpointsTrait;
    use ListWebFunctionRevisions\ListWebFunctionRevisionsTrait;
    use ListWebFunctions\ListWebFunctionsTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateWebFunctionEndpoint\UpdateWebFunctionEndpointTrait;
}
